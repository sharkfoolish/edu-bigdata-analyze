import pandas as pandas
dataFrame = pandas.read_csv('/content/edu_bigdata_imp1.csv', encoding='big5', low_memory=False)
dataFrameFiltered = dataFrame[dataFrame['PseudoID'] == 281]
dataFrameFiltered = dataFrameFiltered[dataFrameFiltered['dp001_prac_score_rate'] == 100]
print(len(dataFrameFiltered))