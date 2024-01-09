import pandas as pandas
dataFrame = pandas.read_csv('/content/edu_bigdata_imp1.csv', encoding='big5', low_memory=False)
dataFrameFiltered = dataFrame[dataFrame['PseudoID'] == 71]
dataFrameFiltered = dataFrameFiltered[dataFrameFiltered['dp001_record_plus_view_action'] == 'paused']
print(len(dataFrameFiltered))