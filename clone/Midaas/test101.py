import pymongo
import pandas as pd

client = pymongo.MongoClient("mongodb://localhost:27017/")
db = client['Midaas']
preprocess = db.preprocessed
df = pd.DataFrame(list(preprocess.find()))

print(df)
fl = df["flair"].tolist()
print(fl)