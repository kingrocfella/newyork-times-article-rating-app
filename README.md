# New York Times article rating app

The full project when run on Docker would achieve the following:
- Import the two news feeds from 2 New York Times resource feed APIs (XML format) into the database.
- Fetch the newly imported feeds from the database to display to the client on the frontend.
- Allow a user rate each article displayed only once and register it in the database.
- Provide an endpoint to get details of the top 5 rated articles which is updated at 5 minutes interval. This means the response can only change after 5 minutes and is not dynamically generated per API call.
- Another newsfeed page where the page checks for new feed content from the resource feed APIs every 30 minutes and displays an alert giving the user an option to load and display fresh articles on the feed.

### Docker
This project is very easy to install and deploy in a Docker container.
Edit the Dockerfile in the backend folder and enter your mysql database connection details.
Then change the mysql database connection details in the .env file to whatever database connection details entered in the Docker file above.
Open a terminal window in the backend folder and run the following commands to open up the backend:

```sh
docker-compose build
docker-compose up -d
docker-compose run app php artisan migrate
```
This would install the necessary images for the backend and migrate the database tables necessary.


Once done, open another terminal in the frontend folder and run the following commansd:
```sh
docker build -t frontend .
docker run -it -p 8080:80 --rm --name dockerize-frontend frontend
```
That's it! The project should be running on 
```sh
http://0.0.0.0:8080
```

For a detailed desription of how the project works, check out the documentation.docx file in this repo!


License
----

MIT
