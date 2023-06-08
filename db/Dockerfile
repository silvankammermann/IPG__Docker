# Use an official MariaDB image as the base
FROM mariadb:latest

# Set the root password for the database
ENV MYSQL_ROOT_PASSWORD=password

# Optionally, set additional environment variables for database configuration
# For example, if you want to customize the database name, user, and password:
# ENV MYSQL_DATABASE=mydb
# ENV MYSQL_USER=myuser
# ENV MYSQL_PASSWORD=mypassword

# Copy any SQL scripts or initialization files to the container
COPY ./scripts/ /docker-entrypoint-initdb.d/

# Expose the default MySQL port (3306) if necessary
EXPOSE 3306

# Start MariaDB when the container launches
CMD ["mysqld"]
