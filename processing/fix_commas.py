#!/usr/bin/python3

#
# Unfortunately, the University of Alabama expense data from open.ua.edu 
# does not conform to the CSV specification and quote fields that contain
# commas, so this script attempts to fix that by assuming the Agency 
# column is only ever one of the hardcoded values below, and joining
# the 3rd and 4th columns otherwise (usually it's the payee's name
# that has a comma. This script should only be run on the unaltered
# "dirty" data; its output is not suitable as input.
#

import csv

VALID_AGENCIES = ['THE UNIVERSITY OF ALABAMA', 'UA SYSTEM OFFICE']

number_fixed = 0
with open('../_data/ua_expenses.csv') as inFile:
    column_names = inFile.readline().strip().split(',')[1:]
    reader = csv.reader(inFile)
    with open('../_data/ua_expenses_fixed.csv', 'w') as outFile:
        writer = csv.writer(outFile, quoting=csv.QUOTE_ALL)
        writer.writerow(column_names)
        for row in reader:
            row_copy = row.copy()
            if len(row_copy) > 13: # unescaped commas in this row
                number_fixed += 1
                agency_column = -1
                for agency in VALID_AGENCIES:
                    try:
                        agency_column = row_copy.index(agency)
                    except ValueError:
                        pass
                if agency_column == -1: continue
                row_copy[2] = ','.join(row_copy[2:agency_column - 1])
                for i in range(3,agency_column - 1):
                    row_copy.pop(i)
            if len(row_copy) > 2:
                row_copy.pop(0)
                row_copy.pop(len(row_copy) - 1) # delete empty column
                writer.writerow(row_copy)

print('Fixed commas in ' + str(number_fixed) + ' rows.')
