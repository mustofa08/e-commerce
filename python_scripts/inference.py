import os
from dotenv import load_dotenv
from flask import Flask, request, jsonify
from roboflow import Roboflow

app = Flask(__name__)

# Muat variabel lingkungan dari file .env
load_dotenv()

# Setel API Key
rf = Roboflow(api_key=os.getenv("ROBOFLOW_API_KEY"))
project = rf.workspace().project("e-commerce-b0yqi")
model = project.version(1).model

@app.route('/predict', methods=['POST'])
def predict():
    file = request.files['image']
    file_path = f"/tmp/{file.filename}"
    file.save(file_path)
    prediction = model.predict(file_path).json()
    return jsonify(prediction)

if __name__ == '__main__':
    app.run(debug=True)