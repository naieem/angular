<!DOCTYPE HTML>
<html>
  <body>
    <script src="https://static.opentok.com/v2/js/opentok.js" charset="utf-8"></script>
    <script charset="utf-8">
      var apiKey = '45622782';
      var sessionId = '1_MX40NTYyMjc4Mn5-MTQ2ODc1NjgzMzgxOX44RFNSSllsUjdQa3kzbk5QdUxmNHlsb3d-fg';
      var token = 'T1==cGFydG5lcl9pZD00NTYyMjc4MiZzaWc9OWM5NTVlZGM3MTAxNjJjYzlkZjVkNWM0NmY2YmFkOTgwNTg2M2Y4YjpzZXNzaW9uX2lkPTFfTVg0ME5UWXlNamM0TW41LU1UUTJPRGMxTmpnek16Z3hPWDQ0UkZOU1NsbHNVamRRYTNremJrNVFkVXhtTkhsc2IzZC1mZyZjcmVhdGVfdGltZT0xNDY4NzU2ODYwJm5vbmNlPTAuMDQ1NzQ0MTQ5MjQ3MTg0Mzk2JnJvbGU9cHVibGlzaGVyJmV4cGlyZV90aW1lPTE0Njg3NjA0NjA=';
      var session = OT.initSession(apiKey, sessionId)
        .on('streamCreated', function(event) {
          session.subscribe(event.stream);
        })
        .connect(token, function(error) {
          var publisher = OT.initPublisher();
          session.publish(publisher);
        });
    </script>
  </body>
</html>