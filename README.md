Budget Visualization Framework
======== 

Adapted for The University of Alabama.

![screenshot](https://raw.github.com/goinvo/Visual-Town-Budget/develop/docs/img/example_screenshot.png)
Open-source budget visualization framework.


##Requirements
* Ruby >= 2.2
* Jekyll >= 3.0

##Setup
Clone this repository to your local machine and run "script/server" on a command line. Then navigate to http://localhost:4000 in a browser. By default Jekyll will rebuild the site whenever files change.

##Components
####Cards
Report statical information about selected entry (`js/cards.js`).

![card-img](https://raw.github.com/goinvo/Visual-Town-Budget/develop/docs/img/cards.png)

####Chart
Shows data change over time (`js/chart.js`).

![chart-img](https://raw.github.com/goinvo/Visual-Town-Budget/develop/docs/img/chart.png)


####Treemap
Used as the main navigation component (`js/treemap.js`).

![treemap-img](https://raw.github.com/goinvo/Visual-Town-Budget/develop/docs/img/treemap.png)

####Table
Alternative navigation technique to a treemap (`js/tables.js`).

![table-img](https://raw.github.com/goinvo/Visual-Town-Budget/develop/docs/img/table.png)

####Component Interface
Each component implements a common interface of 3 calls:

* `Initialize`: called only once, prepares the component to show data
* `Open`: opens a data object and displays its contents using the specified component
* `Update`: refreshes component data (useful when year changes and new values need to be plotted)

##Directory Structure
*  **_config.yml**: Jekyll configuration file
*  **_data**: CSV and JSON data files
*  **processing**:   temporary directory for data conversion
      *  `processCSV.py`: converts CSV file to nested JSON structure
      *  `update.php`: Interface for data update
*  **css**: compiled SCSS and libraries (bootstrap, introJs)
*  **img**: image assets
*  **docs**: documentation
*  **_layouts/default.html** the HTML layout for the single page
*  **_includes**: templates and HTML assets
      *  `imports.php`: CSS and JS assets imports
      *  `datafiles.php`: json datafiles loaded in each instance (AJAX can be used as an alternative)
      *  `home.php`: homescreen html
      *  `navbar.php`: navigation bar html
      *  `templates.php`: contains Mustache templates (eg. table row templates, cards...)
*  **js**:  Javascript assets
      *  `avb.js`: helper functions and initialization routines
      *  `cards.js`: cards component routines
      *  `chart.js`: chart component routines
      *  `home.js`: homescreen routines and introJs based tutorials code
      *  `statistics.js`: functions used to generate statistical info and number formatting functions
      *  `table.js`: table component routines
      *  `treemap.js`: treemap component routines
*  **scss**: SCSS files
      *  `print.scss`:  SCSS applied when printing a Visual Budget page
      *  `global.scss`: main SCSS file (imports all the partials defined below)
      *  **partials**: SCSS assets
           *  `_avb.scss`:  section styles
           *  `_base.scss`: html, body styles, colors and font variables
           *  `_cards.scss`: styles for card component
           *  `_chart.scss`: styles for chart component
           *  `_home.scss`: styles for homescreen
           *  `_navbar.scss`: styles for top navigation bar
           *  `_table.scss`: styles for tabular view
           *  `_treemap.scss`: styles for treemap component

####Required Libraries
*  Bootstrap (grid layout, dropdowns..)
*  D3 (visualizations)
*  Jquery Cookie
*  DetectMobileBrowser
*  Jquery
*  Mustache (templates)
*  IntroJS (required for tutorials)

##Datasets
Budget data is kept in JSON and CSV format. The JSON format is actively used for computation while the CSV format is kept for reference and data download.

####Data structure

The base data unit is an object with the following fields:

*  `key` {string}: entry name
*  `src` {url string}: link to data source from where entry data was extracted (optional)
*  `hash` {string}: entry id (can be arbitrary)
*  `sub` {array of other entries}: subsections that make up current entry
*  `descr` {string} : entry description (optional)
*  `values` {array of value objects} : entry values over time

A simple value object is defined by:

*  `year` : year of value
*  `val` : value

This data structure could be changed should it be considered not ideal for future uses.


####Data Processing Workflow

To get the data from open.ua.edu into the format needed for this application, one must follow these steps:

1. Download the data from open.ua.edu one fiscal year at a time by entering date ranges, hitting Search, and exporting to CSV. Rename those files to `UA_FY_20XX.csv` and put them in the `_data` folder.
2. From the processing folder, run `combine_years.py` to combine all those files into `ua_expenses.csv`, which will be a very big file. Ensure that the process worked but please don't try to commit it or any other huge file to the repo.
3. Run `fix_commas.py` to quote the fields that contain commas and remove extra commas. This should generate `ua_expenses_fixed.csv`.
4. Run `convert_data.py` to calculate totals for each category, payee, and fiscal year combination in `ua_expenses_formatted.csv`. This file should be significantly smaller in size than the others.
5. Rename `ua_expenses_formatted_.csv` to `expenses.csv` if it looks right.
6. Run `processCSV.py updatehome` to update the `home.json` file.
7. Run `processCSV.py ../_data/expenses.csv` to generate the `expenses.json` file that the application will use.

For more information about CSV data formats or update procedures check `docs/data`.

##Core Contributors

####[Involution Studios](http://goinvo.com) (Design and Coding)

*  Lead Developer: [Ivan David DiLernia](http://idilernia.com)
*  Creative Director: [Juhan Sonin](http://twitter.com/jsonin)
*  Lead Designer: [Roger Zhu](http://cargocollective.com/xingjie)

####[Town of Arlington](http://arlingtonma.gov) (Data Collection and Testing)

*  Mike Bouton
*  Andrew Flanagan
*  [Alan Jones](http://www.carr-jones.com/)
*  [Annie LaCourt](https://twitter.com/annielacourt)


##License

Visual Town Budget is licensed under the Apache-2.0 open source license. You can find more information on the Apache-2.0 license at http://www.apache.org/licenses/LICENSE-2.0
