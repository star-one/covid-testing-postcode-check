# covid-testing-postcode-check
A Jadu Homepages widget which allows citizens to check if their postcode is in an area slated for targeted testing

As V1 it does the check in an admittedly appalling way, by paging down a very long list of postcodes in a switch(); that was the quickest I could rustle up in the time of having a handful of hours between being asked to do it and it being expected to be live.

V2 is going to work on the basis of paging through a .csv file which will be able to be uploaded to the filesystem. Still probably not the best way of doing it, but avoiding the faff of having to create custom tables in the database.
