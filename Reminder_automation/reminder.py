# Sign up for twilio and get your account SID and Auth Token
# Install twilio library using pip install twilio
import datetime
from twilio.rest import Client
import streamlit as st
import datetime

# Takes scanned cycle calenders and generates reminder automations

# Reminder Automation Script
def pat_info():
    print ("Input Patient infromation")
    global name , procedure, date, time, phone_num, email
    name = input('Name: ')
    st.text_input("Name: ", key=name)
    procedure = input('Procedure: ')
    st.text_input("Name: ", key=procedure)
    date= input('Date: ')
    st.text_input("Name: ", key=date)
    time = input('Time: ')
    st.text_input("Name: ", key=time)
    phone_num = input('Phone Number: ')
    st.text_input("Name: ", key=phone_num)
    email = input('Email: ')
    st.text_input("Name: ", key=email)
    return name , procedure, date, time, phone_num, email

# Direct information straight to twiloio for direct scheduling after input or at a specified time 
    

def message():
    print(f'Good day {name}, we would like to inform you of your upcoming {procedure} on {date} at {time}')
    print("Confirm availability for this procedure.")
    avail = input('Available (y/n)')
    if avail.lower() == 'y':
        print('Thank you for confirming your appointment.')
    elif avail.lower() == 'n':
        print('If you would like to rescheduel contact our office at your earliest convenience.')

#def send_sms():
print("How many patients are you scheduling reminders for?")
num_patients = int(input('Number? '))
for i in range(num_patients):
    print(f'Entering information for patient {i+1}:')
    pat_info() * num_patients
    #message()
    #print('---')

#pat_info()
#message()

# Track Date and time to initiate Twilio message send 
datetime.date(date)