#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266mDNS.h>
#include "DHT.h"


#define DHTPIN D2
#define DHTTYPE DHT11 
const char* ssid = "falcon venom";// 
const char* password = "123456789";
//WiFiClient client;
char server[] = "192.168.253.89";   

WiFiClient client;    

DHT dht(DHTPIN, DHTTYPE);
void setup()
{
 Serial.begin(115200);
  delay(10);
  dht.begin();
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
 
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
 
  // Start the server
//  server.begin();
  Serial.println("Server started");
  Serial.println(WiFi.localIP());
  delay(1000);
  Serial.println("connecting...");
 }
void loop()
{ 
  float h = dht.readHumidity();
  float t = dht.readTemperature();

  
 if (client.connect(server, 80)) {
    Serial.println("connected");
    Serial.print("GET /crud/insert.php?temp=");
    Serial.print(t);
    Serial.print("&humi=");
    Serial.println(h);
    
    client.print("GET /crud/insert.php?temp=");
    client.print(t);
    client.print("&humi=");
    client.print(h);
    
    client.print(" ");      //SPACE BEFORE HTTP/1.1
    client.print("HTTP/1.1");
    client.println();
    client.println("Host:  192.168.253.89");
    client.println("Connection: close");
    client.println();
  } else {
    // if you didn't get a connection to the server:
    Serial.println("connection failed");
    delay(2000);
  }
  delay(5000);
 }
