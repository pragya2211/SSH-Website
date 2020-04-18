from flask import Flask, render_template, request
from werkzeug import secure_filename
import modeltest
import json

app = Flask(__name__)

@app.route('/')
def upload():
    return render_template('upload.html')

@app.route('/uploader', methods = ['GET', 'POST'])
def uploader():
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
			dictionary ={"predicted_flair":predicted,"actual_flair": actual,"url":line}
			l.append(dictionary) 
		print(size)
		json_object = json.dumps(l) 			  
		with open("sample.json", "w") as outfile: 
		    outfile.write(json_object)
	return render_template("book.html", lis=lis, lis_predicted = lis_predicted,lis_actual = lis_actual,size = size)

if __name__ == '__main__':
    app.run(debug = True)