<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<script 
<script type="text/javascript">
    let ajaxRequest = getXMLHttpRequest();
    if (ajaxRequest) {
        ajaxRequest.onreadystatechange = ajaxResponse;
        ajaxRequest.open("GET", "breakfast.xml");
        ajaxRequest.send(null);
    }

    function ajaxResponse() {
        switch (ajaxRequest.readyState) {
            case 0:
                // readyState 0: request not initialized
                break;
            case 1:
                // readyState 1: server connection established
                break;
            case 2:
                // readyState 2: request received
                break;
            case 3:
                // readyState 3: processing request
                break;
            case 4:
                // readyState 4: request finished and response is ready
                switch (ajaxRequest.status) {
                    case 200:
                        // status 200: OK
                        // do whatever you need to do with ajaxRequest.responseXML
                        break;
                    default:
                        alert("Request failed: " + ajaxRequest.statusText);
                        break;
                }
                break;
            default:
                // unknown readyState
                break;
        }
    }
</script>

</body>

</html>