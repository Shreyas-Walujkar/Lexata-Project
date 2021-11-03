import csv
import json
import tabula as tb

PDF_FilePath=r"C:\\Users\\shrey\\Downloads\\DataTables.pdf"             # Loading .pdf path
Expected_CSV_FilePath=r"C:/Users/shrey/Downloads/DataTables.csv"        # It will create .csv file into that expected path.
tb.convert_into(PDF_FilePath,Expected_CSV_FilePath,output_format="csv",pages='all')


# Takes the file paths as arguments
def make_json(csvFilePath, jsonFilePath):
     
    # create a dictionary
    data = {}
     
    # Open a csv reader called DictReader
    with open(csvFilePath, encoding='utf-8') as csvf:
        csvReader = csv.DictReader(csvf)
         
        # Convert each row into a dictionary
        # and add it to data
        for rows in csvReader:
             
            # Assuming a column named 'No' to
            # be the primary key
            key = rows['Name']
            data[key] = rows
 
    # Open a json writer, and use the json.dumps()
    # function to dump data
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf:
        jsonf.write(json.dumps(data, indent=4))

csvFilePath = r'C:/Users/shrey/Downloads/DataTables.csv'
jsonFilePath = r'C:\\Users\\shrey\\Downloads\\DataTables.json'

# Call the make_json function
make_json(csvFilePath, jsonFilePath)
