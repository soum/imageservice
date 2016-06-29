## imageservice

######features: 
1. Send request parameters such as image of the product that needs to be engraved 
2. Text that needs to be engraved on the product
3. Save the new image file with overlayed text in a directory (in the app server)

######request parameters:

http://localhost:8888/imageService/?url={absolute image url}&text={string}&order={order number}&serviceKey={base64 encoded string}

