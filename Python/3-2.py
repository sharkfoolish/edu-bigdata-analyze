import pandas as pandas
dataFrame = pandas.read_csv('/content/edu_bigdata_imp1.csv', encoding='big5', low_memory=False)
dataFrameFiltered = dataFrame[dataFrame['PseudoID'] == 71]
dataFrameFiltered = dataFrameFiltered[['dp001_review_start_time', 'dp001_review_end_time']]
dataFrameFiltered['dp001_review_start_time'] = pandas.to_datetime(dataFrameFiltered['dp001_review_start_time']).dt.date
dataFrameFiltered['dp001_review_end_time'] = pandas.to_datetime(dataFrameFiltered['dp001_review_end_time']).dt.date
uniqueValues = dataFrameFiltered['dp001_review_start_time'].unique()
for uniqueValue in uniqueValues:
  print(uniqueValue)