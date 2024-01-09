import pandas as pandas
dataFrame = pandas.read_csv("/content/edu_bigdata_imp1.csv", encoding = "big5", low_memory = False)
videoCounts = dataFrame["dp001_review_sn"].value_counts()
print(int(videoCounts.head(1).index.values[0]))