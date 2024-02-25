from apyori import apriori

transactions = []

 with open('groceries - groceries.csv', 'r') as file:
     reader = csv.reader(file)
     for row in reader:
         transactions.append(row)

 min_support = 0.003
 min_confidence = 0.2

 results = list(apriori(transactions, min_support=min_support, min_confidence=min_confidence))

 for result in results:
     items = [i for i in result.items]
     if len(items) > 1:
         print("{0} -> {1} (support: {2:.3f}, confidence: {3:.3f}, lift: {4:.3f})".format(
             ', '.join(items[:-1]),
             items[-1],
             result.support,
             result.ordered_statistics[0].confidence,
             result.ordered_statistics[0].lift))