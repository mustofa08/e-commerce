@extends('layouts.admin')

@section('content')

    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Category information</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{route('admin.index')}}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{route('admin.categories')}}">
                            <div class="text-tiny">Categories</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">New Category</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-product form-style-1" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="name">
                        <div class="body-title">Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Category name" name="name" tabindex="0" value="{{old('name')}}" aria-required="true" required="">
                    </fieldset>
                    @error('name') <span class="alert alert-danger text-center">{{$message}}</span> @enderror
                    <fieldset class="name">
                        <div class="body-title">Category Slug <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Category Slug" name="slug" tabindex="0" value="{{old('slug')}}" aria-required="true" required="">
                    </fieldset>
                    @error('slug') <span class="alert alert-danger text-center">{{$message}}</span> @enderror
                    <fieldset>
                        <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <div class="item" id="imgpreview" style="display:none">
                                <img src="" class="effect8" alt="">
                            </div>
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('image') <span class="alert alert-danger text-center">{{ $message }}</span>  @enderror

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>

@endsection

@push('scripts')
<script>
    $(function() {
        // Menangani perubahan file input
        $('#myFile').on("change", function() {
            const photoInp = $("#myfile");
            const [file] = this.files;  // Mengambil file yang dipilih
            if (file) {
                // Menampilkan gambar pratinjau jika file ada
                const reader = new FileReader();
                reader.onload = function(e) {
                    $("#imgpreview img").attr('src', e.target.result); // Mengatur gambar pratinjau
                    $("#imgpreview").show(); // Menampilkan pratinjau
                };
                reader.readAsDataURL(file); // Membaca file sebagai URL data
            }
        });

        // Mengubah slug berdasarkan nama yang dimasukkan
        $("input[name='name']").on("input", function() {
            $("input[name='slug']").val(StringSlug($(this).val()));
        });
    });

    // Fungsi untuk mengubah teks menjadi slug
    function StringSlug(Text) {
        return Text.toLowerCase()
            .replace(/[^\w\s-]+/g, "") // Menghapus karakter non-alfanumerik selain spasi dan tanda hubung
            .replace(/[\s-]+/g, "-")   // Mengganti spasi atau tanda hubung ganda dengan satu tanda hubung
            .replace(/^-+|-+$/g, '');   // Menghapus tanda hubung di awal atau akhir
    }
</script>
@endpush
