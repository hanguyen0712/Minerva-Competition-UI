COMPETITION SEARCH WIDGET

1) Installing the widget on Wordpress
Step 1: Download "competition_search.rar"
Step 2: On WordPress, go to Plugins > Add New > Upload Plugin and upload the .rar

2) Adding the widget to a page
The widget can be added to any webpage. In case you want to add it to a WordPress page or post, paste this script in the HTML editor (next to the "Visual" button):
<iframe src="../wp-content/plugins/competition_search/start.php" width="100%" height="600px" frameborder="0">

3) Inserting data on Airtable
- Login link: https://airtable.com/invite/l?inviteId=invd2M6YqJkF0tFqf&inviteToken=d5abe7212b96a7e932bd9a6fbb6fc2e78f4f3ef1a12781d7599bc4ba682b399d
- The list includes four spreadsheets:
	* national_and_below (synced): a list of all national-and-below-level competitions
	* international (synced): a list of all international-level competitions
	* new_suggestions (unsynced): this includes a Grid view and a Form view. 
	The form view shows what APs see when they submit a new competition.
	The grid view collects APs' response. After evaluating these responses, admins move entries from this spreadsheet to either "international" or "national_and_below" sheet to sync them with the main website.
	* modify_suggestions (unsynced): similar to new_suggestions, but for modification suggestions of existing competitions.

Note: How to get Airtable app ID and API key?
- App ID: Go to Help > API documentation. The url should be airtable.com/APP_ID/
- API key: Go to Account page (your profile picture at the top right corner of the site) > API key.
If you are in a new account, you have to click "Generate API key".
