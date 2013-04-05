<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>OpenTok Getting Started</title>
  <script src="http://static.opentok.com/v0.91/js/TB.min.js"></script>

  <script type="text/javascript">
    var apiKey = '21805942';
    var sessionId = '2_MX4yMTgwNTk0Mn5-VHVlIE1hciAxMiAwMTo0Njo0MiBQRFQgMjAxM34wLjY4MjUxMTN-';
    var token = 'T1==cGFydG5lcl9pZD0yMTgwNTk0MiZzaWc9NjM0NmU5MzUzNjAxZTAwZWI5ZmQ2ZWM4NzMzNzhiMmNlYmMxMWQ2NzpzZXNzaW9uX2lkPTJfTVg0eU1UZ3dOVGswTW41LVZIVmxJRTFoY2lBeE1pQXdNVG8wTmpvME1pQlFSRlFnTWpBeE0zNHdMalk0TWpVeE1UTi0mY3JlYXRlX3RpbWU9MTM2MzA3ODAwNCZleHBpcmVfdGltZT0xMzYzMTY0NDA0JnJvbGU9cHVibGlzaGVyJm5vbmNlPTY1NjgzOA==';

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