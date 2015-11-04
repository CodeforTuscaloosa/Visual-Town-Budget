#!/usr/bin/python3

# The purpose of this script is to convert the University of Alabama's
# expense data (from open.ua.edu) into the format used by Code for Raleigh's 
# budget visualization framework so their frontend code will work without 
# modifications. You can find their data format at:
# https://github.com/CORaleigh/Visual-Town-Budget/blob/master/docs/data/CSVformatSpecs.docx
#

import csv

INFILENAME = 'ua_expenses_fixed.csv'
OUTFILENAME = 'ua_expenses_formatted.csv'

# dictionary mapping categories to dictionaries mapping payees to per-year totals
categories = {} 
# keep a list of fiscal years encountered
fiscal_years = []
# read the cleaned data, totalling amounts per payee/category combination
with open('../_data/' + INFILENAME) as inFile:
    inFile.readline() # ignore column headers
    rows_read = 1
    reader = csv.reader(inFile)
    for row in reader:
        rows_read += 1
        category = row[2]
        payee = row[1]
        fiscal_year = row[9]
        amount = float(row[8])
        if category == '':
            print(row)
        if fiscal_year not in fiscal_years:
            fiscal_years.append(fiscal_year)
        if category not in categories:
            categories[category] = {}
        if payee not in categories[category]:
            categories[category][payee] = {}
        if fiscal_year not in categories[category][payee]:
            categories[category][payee][fiscal_year] = amount
        else:
            categories[category][payee][fiscal_year] += amount
    print(str(rows_read) + ' rows read from ' + INFILENAME)

fiscal_years.sort()
column_names = ['LEVEL1','LEVEL2','TOOLTIP','SOURCE','SOURCE URL'] + fiscal_years + ['LEVEL']

# write out the data according to the CodeforRaleigh format
with open('../_data/' + OUTFILENAME, 'w') as outFile:
    writer = csv.writer(outFile, quoting=csv.QUOTE_ALL)
    writer.writerow(column_names)
    rows_written = 1
    grand_totals = dict(zip(fiscal_years, [0] * len(fiscal_years)))
    for category in categories:
        category_totals = dict(zip(fiscal_years, [0] * len(fiscal_years)))
        for payee in categories[category]:
            row = [category, payee, '', '', '']
            for year in fiscal_years:
                if year in categories[category][payee]:
                    category_totals[year] += categories[category][payee][year]
                    row.append(str(int(categories[category][payee][year])))
                else:
                    row.append('')
            row.append('2')
            writer.writerow(row)
            rows_written += 1
        row = [category + ' Total', '', '', '', '']
        for year in fiscal_years:
            row.append(str(int(category_totals[year])))
            grand_totals[year] += category_totals[year]
        row.append('1')
        writer.writerow(row)
        rows_written += 1
    total_row = ['EXPENSES TOTAL', '', '', '', '']
    for year in fiscal_years:
        total_row.append(str(int(grand_totals[year])))
    total_row.append('0')
    writer.writerow(total_row)
    rows_written += 1
    print(str(rows_written) + ' rows written to ' + OUTFILENAME)

