# imageservice

features: 
1: Send request parameters such as image of the product that needs to be engraved 
2: Text that needs to be engraved on the product
3: Save the new image file with overlayed text in a directory (in the app server)
4: Write a job to post the files into a sftp
5: Out of scope: The files gets attached to a purchase order in a separate batch job from that sftp location

request parameters

-- url=http://images.all-free-download.com/images/graphiclarge/daisy_pollen_flower_220533.jpg&text=John smith

To do: 
------------------------------------------
-- add order number parameter
-- write method to post files to a sftp
