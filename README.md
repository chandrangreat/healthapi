## HealthApi: A REST API backend created using Slim framework

## Steps to install and start it up

1) Install all the dependencies using composer

2) Configure the Virtual host with the below entry
    
    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/healthapi/public"
        ServerName healthapi
    </VirtualHost>

3) Add the folowing entry to the hosts file

    127.0.0.1       healthapi

4) Navigate to the URL http://healthapi/devices with the server running ofcourse. Use Apache server.

Note: The is only one end point as of now. This API method reads contents from a JSON file and exposes the contents. The front end for this API is in device-view repository.