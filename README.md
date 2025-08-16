# 🌾 Crop Recommendation System using ML and IoT

## 📌 Project Overview

The **Crop Recommendation System using ML and IoT** is designed to help
farmers make data-driven decisions about which crops to cultivate.\
By integrating **Machine Learning** with **IoT-based sensors**, this
system leverages both **historical datasets** and **real-time
environmental data**\
to provide accurate crop recommendations, fertilizer suggestions, and
weather insights.

------------------------------------------------------------------------

## 🎯 Objectives

-   Assist farmers in selecting the most suitable crops based on **soil
    nutrients and weather conditions**.
-   Collect **real-time sensor data** (pH, NPK, temperature, humidity)
    through **IoT hardware**.
-   Enhance agricultural productivity and reduce resource wastage.
-   Provide a **web-based interface** for easy farmer interaction.

------------------------------------------------------------------------

## ⚙️ System Architecture

![System Architecture](assets/img/system_arch.png)

------------------------------------------------------------------------

## 🖥️ Tech Stack

### 🔹 Machine Learning

-   Python (scikit-learn, pandas, numpy)
-   Dataset from **Kaggle** for training

### 🔹 IoT Hardware

-   NodeMCU ESP8266 / ESP32
-   Sensors: **pH Sensor, NPK Sensor, DHT11 (Temperature & Humidity)**

### 🔹 Backend

-   PHP
-   Python integration with PHP for ML predictions

### 🔹 Database

-   MySQL (XAMPP)

### 🔹 Frontend

-   HTML, CSS, Bootstrap

------------------------------------------------------------------------

## 📊 Features

-   🌱 **Crop Recommendation**: Suggests best crops based on soil &
    climate.
-   💊 **Fertilizer Recommendation**: Provides fertilizer suggestions.
-   ☁️ **Weather Forecasting**: Real-time weather updates using
    OpenWeather API.
-   📡 **Sensor Integration**: Live data collection and display.
-   🔐 **Admin & Farmer Portal**: Secure login and personalized
    dashboard.

------------------------------------------------------------------------

## 🛠️ Software Setup

### 🔹 Requirements

-   Python 3.12.6

-   XAMPP (MySQL & Apache Server)

-   PHP 8+

-   Libraries:

    ``` bash
    pip install pandas numpy scikit-learn flask requests
    ```

### 🔹 Running the Project

1.  Clone the repository:

    ``` bash
    git clone https://github.com/your-repo/crop-recommendation.git
    ```

2.  Import MySQL database from `/database/crop_db.sql`.

3.  Start **XAMPP** (Apache & MySQL).

4.  Run ML model server:

    ``` bash
    python crop_model.py
    ```

5.  Open `http://localhost/crop_system` in browser.

------------------------------------------------------------------------

## 📷 Screenshots

### 🔹 System Dashboard

![Dashboard](screenshots/dashboard.png)

### 🔹 Crop Recommendation Output

![Crop Recommendation](screenshots/crop_recommend.png)

### 🔹 Weather Forecast Page

![Weather Forecast](screenshots/weather.png)

### 🔹 Sensor Values Display

![Sensor Data](screenshots/sensor.png)

------------------------------------------------------------------------

## 🚀 Future Enhancements

-   🌍 Mobile App for farmers (Android/iOS).
-   🤖 Advanced ML models (Deep Learning).
-   📊 Data visualization dashboards.
-   ☁️ Cloud integration for large-scale deployment.

------------------------------------------------------------------------

## 👨‍💻 Contributors

-   **Milind Chavan** -- Project Lead\
-   Team Members -- ML Model, IoT, Frontend & Backend

------------------------------------------------------------------------

## 📜 License

This project is licensed under the MIT License -- feel free to use and
modify.
