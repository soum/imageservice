## imageservice

######features: 
1. Send request parameters such as image of the product that needs to be engraved 
2. Text that needs to be engraved on the product
3. Save the new image file with overlayed text in a directory (in the app server)
4. Write a job to post the files into a sftp
5. Out of scope: The files gets attached to a purchase order in a separate batch job from that sftp location

######request parameters:

http://localhost:8888/imageService/?url=[absolute image url]&text=[string]

######To do: 
------------------------------------------
1. Add order number parameter
2. Write method to post files to a sftp
3. Send text position as a request parameter 
