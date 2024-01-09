import pandas as pandas
dataFrame = pandas.read_csv('/content/edu_bigdata_imp1.csv', encoding='big5', low_memory=False)
dataFrameFiltered = dataFrame[dataFrame['PseudoID'] == 39]
uniqueValues = dataFrameFiltered.dropna(subset=['dp001_question_sn'])['dp001_question_sn'].unique()
print(len(uniqueValues))