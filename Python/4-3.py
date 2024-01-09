import pandas as pandas
dataFrame = pandas.read_csv("/content/edu_bigdata_imp1.csv", encoding = "big5", low_memory = False)
print(*dataFrame["dp002_verb_display_zh_TW"].dropna().value_counts().head(3).index.values)