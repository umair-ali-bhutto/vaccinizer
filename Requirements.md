# Online COVID Test and Vaccination Booking System Requirements

## Table of Contents

1. [Introduction](#introduction)
2. [Proposed Scenario](#proposed-scenario)
3. [System Modules](#system-modules)
4. [Module Description](#module-description)

## Introduction

In response to the global challenges posed by the Coronavirus pandemic, the Online COVID Test and Vaccination Booking System aims to provide a web application for patients to book COVID tests and vaccinations online. This system facilitates communication between people, hospitals, and administration to collectively combat the pandemic. Users can track vaccination appointments, access vaccination history, and follow COVID solution guidelines for symptoms.

## Proposed Solution

The web app offers an Online Registration System (ORS) framework, linking hospitals nationwide for mobile number-based online registration and appointment scheduling. It enables online appointments for vaccination, provides detailed reports on test and vaccination patients, and allows hospitals to manage their registration and appointment processes efficiently.

## System Modules

### Admin

- All Patient Details
- Report of COVID Test/Vaccination
  - Test Report, Vaccination (Date/Week/Monthly Report)
- List of Vaccines
  - Available or Unavailable
- Approval Hospital Login
- List of Hospitals
- Booking Details

### Hospital

- Register
- Login
- List of Patient Details
- Request from Patient (COVID Test/Vaccination)
  - Approve or Reject
- Update COVID Test Result
- Update Vaccination Status

### Patient

- Register
- Login
- Search COVID Test/Vaccination Hospital
- Request for COVID Test/Vaccination for Hospital
- Report of COVID Test/Vaccination Taken
- Book Hospital Appointment
- My Appointment
- View Results
- My Profile

## Module Description

### Admin

- **All Patient Details:**
  - View all patient profile details.
- **Report of COVID – 19:**
  - Patient, COVID – 19 test report (Date-wise report).
  - Admin can export details in XLS format by date, week, and month-wise reports.
- **List of Vaccines:**
  - Available or Unavailable.
  - Admin can view the availability of vaccination.
- **Approve Hospital Login:**
  - Approve or Reject.
  - Approval of patient appointment requests from the admin.
- **List of Hospitals:**
  - Admin can view hospital details.
- **Booking Details:**
  - Admin can view booking details from patient side for COVID – 19 test results.

### Hospital

- **Register & Login:**
  - Register and login into the app with hospital name, address, and location details.
- **List of Patient Details:**
  - Hospitals can view patient details approved for COVID – 19 tests.
- **Request from Patient:**
  - Hospitals can request patients approved/rejected for COVID – 19 test/vaccination.
- **Update COVID – 19 Result:**
  - Hospitals can update patients' COVID – 19 results.
- **Update Vaccination Status:**
  - Hospitals can update patients' vaccination status.

### Patient

- **Register & Login:**
  - Patients can register and login with patient name, address, and location details.
- **Search COVID-19 / Vaccination Hospital:**
  - Patients can search for COVID-19 hospitals and vaccination hospitals.
- **Request for COVID-19 Test / Vaccination Hospital:**
  - Patients can request COVID-19 tests. Approval allows patients to take vaccination from hospitals.
- **Report of COVID Test/Vaccination Taken:**
  - Patients can view COVID-19 test result reports and vaccination suggestions.
- **Book Hospital Appointment:**
  - Patients can book appointments for COVID-19 tests.
- **My Appointment:**
  - Patients can check appointment timing and hospital details.
- **View Results:**
  - Patients can view COVID-19 test results and vaccination suggestions.
- **My Profile:**
  - Patients can view, edit, or delete profile details.
