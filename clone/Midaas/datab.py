import sqlite3
import pandas as pd
from pandas import DataFrame
import csv

conn = sqlite3.connect('tests.db')
c= conn.cursor()
sql_delete_query ='''DROP TABLE test'''
conn.execute(sql_delete_query)
c.execute('''CREATE TABLE test	
	([sno] INTEGER,[url] text,   [flair] text, [title] text,[id] INTEGER,[score] INTEGER, [body] text,[numberOfcomments] INTEGER,[created] INTEGER, [author] text, [upvoteRatio] text, [comments] text, [timestamp] timestamp)''')
#read_test = pd.read_csv('testset.csv')
#read_test.to_sql('TEST0', conn, if_exists='append', index = False)
reader = csv.reader('testset.csv')
next(reader) # Skip the header row.
for row in reader:
	c.execute(
	"INSERT INTO test VALUES (%d, %s, %s, %s,%d,%d,%s,%d, %d,%s,%s,%s)",
	row
	)
#conn.commit()
#for row in read_test:

"""c.execute('''INSERT INTO test (sno, url,flair,title,id,score,body,numberOfcomments,created,author,upvoteRatio,comments,timestamp)
	SELECT DISTINCT t.sno,t.url,t.flair, t.title, t.id , t.score , t.body, t.numberOfcomments, t.created , t.author , t.upvoteRatio , t.comments , t.timestamp
	FROM TEST0 t''')"""

conn.commit()
df = DataFrame(c.fetchall(), columns=['sno','title','body','comments','url'])
print (df)
