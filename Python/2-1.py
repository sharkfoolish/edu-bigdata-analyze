import pandas as pandas
dataFrame = pandas.read_csv('/content/edu_bigdata_imp1.csv', encoding='big5', low_memory=False)
dataFrameFiltered = dataFrame[dataFrame['PseudoID'] == 281]
uniqueValues = dataFrameFiltered[['dp001_video_item_sn', 'dp001_indicator']].drop_duplicates()
for index in uniqueValues.index:
  print(f'{int(uniqueValues.at[index, "dp001_video_item_sn"])} --> {uniqueValues.at[index, "dp001_indicator"]}')