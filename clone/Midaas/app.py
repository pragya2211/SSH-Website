from flask import Flask, render_template,url_for,request, redirect
from flask_sqlalchemy import SQLAlchemy
import modeltest
from datetime import datetime
from werkzeug import secure_filename
import modeltest
import json
import os
port = int(os.environ.get("PORT",5000))

app = Flask(__name__)
@app.route('/')
def root():
	return render_template("index.html")
@app.route('/results', methods = ['GET','POST'])
def results():
	predicted = ""
	actual = ""
	try:
		request_text = request.form['posturl']
		#request_text = requests.get(url)
		print(request_text)
		actual = str(modeltest.actual(request_text))
		predicted = str(modeltest.predict(request_text))
		print(predicted)
		print(actual)
	except:
		print("Couldn't get a url")
	
	return render_template('index.html', predicted = predicted,actual = actual)

@app.route('/upload', methods=['GET', 'POST'])
def upload():
    return render_template('upload.html')

@app.route('/automated_testing', methods = ['GET', 'POST'])
def automated_testing():
	#content = ""
	l= []
	lis = []
	lis_predicted = []
	lis_actual = []

	size = 0
	name = ""
	if request.method == 'POST':
		f = request.files['file']
		name = str(f.filename)
		f.save(secure_filename(f.filename))
		f.close()
	if(name != ""):
		f = open(name, "r")
		for line in f:
			print(line)
			lis.append(line)
			actual = str(modeltest.actual(line))
			predicted = str(modeltest.predict(line))
			print(actual,predicted)
			lis_actual.append(actual)
			lis_predicted.append(predicted)
			size = size+1
			dictionary ={line:predicted}
			l.append(dictionary) 
		print(size)
		json_object = json.dumps(l) 			  
		with open("sample.json", "w") as outfile: 
		    outfile.write(json_object)
	return render_template("book.html", lis=lis, lis_predicted = lis_predicted,lis_actual = lis_actual,size = size)






@app.errorhandler(404)
def page_not_found(error):
    return 'This page does not exist', 404



if __name__ == '__main__':
    app.run(debug=True)

