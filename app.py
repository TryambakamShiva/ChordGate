from flask import Flask,render_template, redirect, request, jsonify, session
from flask_session import Session
from chord_extractor.extractors import Chordino
import json
import os
import sys 
from pathlib import Path
from flask_cors import CORS

app = Flask(__name__,template_folder="templates",
              static_folder='static')
CORS(app)

@app.route("/")
def hello():
    return render_template('index.html')
varb = None



@app.route('/process', methods=['POST', 'GET'])
def process():
 if request.method == 'POST':
    data = request.get_json() 
    datas = json.dumps(data)
    datas = datas.replace(r"\n",'').replace(r"\r\n",'').replace(r"\r",'').replace(r" ",'')
    datas = json.loads(datas)
    datas = datas["value"]
    chords = None
    datas = os.path.join('songs', datas)
    if Path(datas).suffix == '.mp3':
    # Following Code is Based on chord-extractor by ohollo ( https://github.com/ohollo/chord-extractor )  
    # which is Licensed under the GNU General Public License v2.0.
    # ThIS web application uses the  Python library namely “chord-extractor” from the repository concerned to extract chord sequences from sound files of multiple formats. 
    # The extraction process wraps around Chordino ( https://code.soundsoftware.ac.uk/projects/nnls-chroma/ ).   
         chordino = Chordino(roll_on=1) 
         chords = chordino.extract(datas)

    elif Path(datas).suffix == '.mid':  
         chordino = Chordino(roll_on=1)
         conversion_file_path = chordino.preprocess(datas)
         chords = chordino.extract(conversion_file_path)
         
    else:
         chordino = Chordino(roll_on=1) 
         chords = chordino.extract(datas)
         
    
    global varb
    varb = chords
    
    return jsonify(result=chords)
    
 elif request.method == 'GET':
    
    return render_template('chord.html', data = varb)
    
@app.route("/chord")
def chord():
    return render_template('chord.html', data = varb)
 
if __name__ == '__main__':
    app.run(debug=True)