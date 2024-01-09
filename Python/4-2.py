import pandas as pandas
dataFrame = pandas.read_csv("/content/edu_bigdata_imp1.csv", encoding = "big5", low_memory = False)
dataFrame = dataFrame["dp002_extensions_alignment"].dropna()
index = dataFrame.str.contains('十二年國民基本教育類')
print(dataFrame[index].count())