<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>OpenTok Getting Started</title>
  <script src="http://static.opentok.com/v0.91/js/TB.min.js"></script>

  <script type="text/javascript">
    var apiKey = '21805942';
    var sessionId = '2_MX4yMTgwNTk0Mn5-VHVlIE1hciAxMiAwMTo0Njo0MiBQRFQgMjAxM34wLjY4MjUxMTN-';
    var token = 'T1==cGFydG5lcl9pZD0xMTQyMTg3MiZzaWc9ZTg0MmMzMTBhN2FhMmZlOTA4ZjMxNDQyNGI1OGNmNWFkZjBmNWY0ZDpzZXNzaW9uX2lkPTFfTVg0eE1UUXlNVGczTW41LU1qQXhNaTB3Tmkwd09DQXdNVG93TmpvMU1DNDBOVE14TXpJck1EQTZNREItTUM0ME9UWTBPVE0zTmpJek1qaCZjcmVhdGVfdGltZT0xMzg0MTU5MzM1JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTEzODQxNTkzMzUuNzgwNzgyOTYyMTI2NiZleHBpcmVfdGltZT0xMzg0NTkxMzM1JmNvbm5lY3Rpb25fZGF0YT1oZWxsbyt3b3JsZCUyMQ==';

    TB.setLogLevel(TB.DEBUG);

    var session = TB.initSession(sessionId);
    session.addEventListener('sessionConnected', sessionConnectedHandler);
    session.addEventListener('streamCreated', streamCreatedHandler);
    session.connect(apiKey, token);

    var publisher;

    function sessionConnectedHandler(event) {
      publisher = TB.initPublisher(apiKey, 'myPublisherDiv');
      session.publish(publisher);

      // Subscribe to streams that were in the session when we connected
      subscribeToStreams(event.streams);
    }

    function streamCreatedHandler(event) {
      // Subscribe to any new streams that are created
      subscribeToStreams(event.streams);
    }

    function subscribeToStreams(streams) {
      for (var i = 0; i < streams.length; i++) {
        // Make sure we don't subscribe to ourself
        if (streams[i].connection.connectionId == session.connection.connectionId) {
          return;
        }

        // Create the div to put the subscriber element in to
        var div = document.createElement('div');
        div.setAttribute('id', 'stream' + streams[i].streamId);
        document.body.appendChild(div);

        // Subscribe to the stream
        session.subscribe(streams[i], div.id);
      }
    }
  </script>
  </head>

<body>
  <div id="myPublisherDiv"></div>
</body>
</html>