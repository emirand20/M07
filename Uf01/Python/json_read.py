import json
{
    "id": "https://aaa",
    "$schema": "https://json.schemastore.org/babelrc",
    "type": "object"
}

with open("jsonFile.json", 'r') as file:
    result = json.load(file)
    print(result)