from tkinter import *
from tkinter.scrolledtext import ScrolledText
import tkinter.messagebox
import datetime
import time
import datetime as dt
from tkinter import ttk
import tkinter as tk
from time import strftime


def time():
    string = strftime('%H:%M:%S %p')
    Time.config(text=string)
    Time.after(1000, time)

date = dt.datetime.now()


orders = {}

num_orders = 0

def generate_order_num():
    global num_orders
    num_orders += 1
    return f"{num_orders:03d}"

def display_order():
    Price=0
    Item1 = 0
    Item2 = 0
    Item3= 0
    Item4 = 0
    Item5 = 0
    Item6 = 0
    Item7 = 0
    Item8 = 0
    Item9 = 0
    Item10 = 0
    Item11 = 0
    Item12 = 0
    Item13 = 0
    Item14 = 0
    Item15 = 0

    name = name_entry.get()
    order_num = generate_order_num()
    order_label.config(text="Order Number: " + order_num)
    
    date_time = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    tel=number_entry.get()
    
    SANDWECH = []
    if var1.get():
        SANDWECH.append("tacos")
        Item1=1
    if var2.get():
        SANDWECH.append("Makloub")
        Item2=1
    if var3.get():
        SANDWECH.append("Chess Nan")
        Item3=1
    if var4.get():
        Item4=1
        SANDWECH.append("Pizza")
    if var5.get():
        Item5=1
        SANDWECH.append("malfouf")
    Viandes = []
    if var6.get():
        Item6=1
        Viandes.append("Thon")
    if var7.get():
        Item7=1
        Viandes.append("Chwarma")
    if var8.get():
        Item8=1
        Viandes.append("Escalope")
    if var9.get():
        Item9=1
        Viandes.append("Cordon bleu")

    Drinks = []
    if var10.get():
        Item10=1
        Drinks.append("Eau 0,5L")
    if var11.get():
        Item11=1
        Drinks.append("Soda")
    if var12.get():
        Item12=1
        Drinks.append("Tea")

    Supplement = []
    if var13.get():
        Item13=1
        Supplement.append("Frite")
    if var14.get():
        Item14=1
        Supplement.append("Fourmage")
    if var15.get():
        Item15=1
        Supplement.append("Mozzarela")

    Price = ((Item1 * 6.3) + (Item2 * 5.5) +(Item3 * 5.5)+ (Item4 * 11) + (Item5 * 4.5) + (Item6 * 0.9) + (Item7 * 1.3) +
                 (Item8 * 2) + (Item9 * 2.3) + (Item10 * 0.9) + (Item11 * 2) + (Item12 * 0.9) + (Item13 * 2) +
                 (Item14 * 0.6) + (Item15 * 1.3))
    formatted_price = "{:.3f}".format(Price)
    


    orders[order_num]= {"Name": name,
                        "tel": tel, 
                        "Date/Time": date_time,
                        "Options": SANDWECH,
                        "Options1": Viandes,
                        "Options2": Drinks,
                        "Options3": Supplement,
                        "Options4":formatted_price}
    Prix_label.config(text="Total Prix: " + formatted_price + " DT")
 
    update_table()
    
# Define function to update the table of orders
def update_table():
    for row in table.get_children():
        table.delete(row)
    for order_num, order_info in orders.items():
        table.insert("", "end",
        values=(
            order_num,                          
            order_info["Name"],                    
            order_info["tel"],                     
            order_info["Date/Time"],                
            ", ".join(order_info["Options"]),      
            ", ".join(order_info["Options1"]),     
            ", ".join(order_info["Options2"]),    
            ", ".join(order_info["Options3"]),
            order_info["Options4"],  
        )
    )


#========================== GUI CONFIGURATION ===========================#
root = Tk()
root.geometry("1081x733+80+20")
root.title("Restaurant Management System")
root.configure(background = "#ADADFF")
root.resizable(0,0)
frame = tkinter.Frame(root)
frame.pack()

Header_frame =tkinter.LabelFrame(frame)
Header_frame.grid(row= 0, column=0, padx=20, pady=10)
#============================ Header  ==============================#
#============================ Logo ==============================#
image = PhotoImage(file="i.png")
small_img = image.subsample(12,12)
img = Label(Header_frame, image=small_img )
img.grid(row=0, column=0, rowspan=6, padx=5, pady=5)
#============================ El HAJ restaurent ==============================#
title = Label(Header_frame, text="El HAJ restaurent", font=("Calibri", 18, "bold"),bd=21 ,bg="navy blue",fg="white")
title.grid(row=0, column=5, padx=(0, 70), pady=5 )
#============================ Time AREA ==============================#
Time = Label(Header_frame, font=('calibri', 18,'bold'))
Time.grid(row=0, column=9, padx=10, pady=20, )
#============================ Date AREA ==============================#
Date = Label(Header_frame, text=f"{date:%A, %B %d, %Y}", font=("Calibri", 18, "bold"),bd=21 )
Date.grid(row=0, column=10, padx=10, pady=20 )
#============================ order  ==============================#
order_label = Label(Header_frame, text="num_orders:***",font=("Calibri", 18, "bold"))
order_label.config(highlightthickness=2, highlightbackground="navy blue")
order_label.grid(row=0, column=12, rowspan=6, padx=5, pady=5)


for widget in Header_frame.winfo_children():
    widget.grid_configure(padx=10, pady=5)
#============================ menu  ==============================#
food_frame = tkinter.LabelFrame(frame)
food_frame.grid(row=1, column=0, sticky="news", padx=20, pady=10)



var1 = IntVar()
var2 = IntVar()
var3 = IntVar()
var4 = IntVar()
var5 = IntVar()
var6 = IntVar()
var7 = IntVar()
var8 = IntVar()
var9 = IntVar()
var10 = IntVar()
var11 = IntVar()
var12 = IntVar()
var13 = IntVar()
var14 = IntVar()
var15 = IntVar()
var16 = IntVar()


group_box1 = tk.LabelFrame(food_frame, text="SANDWECH")
group_box1.pack(side="left", fill="both", expand="yes", padx=20, pady=10)

# create check boxes within group box 1
check_button1_1 = tk.Checkbutton(group_box1,variable=var1,onvalue=1,offvalue=0, text="Tacos" )
check_button1_1.grid(row=0, column=0, padx=10, pady=5)
check_button1_2 = tk.Checkbutton(group_box1, variable=var2,onvalue=1,offvalue=0,text="Makloub")
check_button1_2.grid(row=1, column=0, padx=10, pady=5)
check_button1_3 = tk.Checkbutton(group_box1,variable=var3,onvalue=1,offvalue=0, text="Chess Nan")
check_button1_3.grid(row=2, column=0, padx=10, pady=5)
check_button1_4 = tk.Checkbutton(group_box1, variable=var4,onvalue=1,offvalue=0, text="Pizza")
check_button1_4.grid(row=3, column=0, padx=10, pady=5)
check_button1_5 = tk.Checkbutton(group_box1, variable=var5,onvalue=1,offvalue=0,text="malfouf")
check_button1_5.grid(row=4, column=0, padx=10, pady=5)

# repeat for group boxes 2-5
group_box2 = tk.LabelFrame(food_frame, text="Viandes")
group_box2.pack(side="left", fill="both", expand="yes", padx=20, pady=10)
check_button2_1 = tk.Checkbutton(group_box2, variable=var6,onvalue=1,offvalue=0,text="Thon ")
check_button2_1.grid(row=0, column=0, padx=10,  pady=5)
check_button2_2 = tk.Checkbutton(group_box2, variable=var7,onvalue=1,offvalue=0,text="Chwarma")
check_button2_2.grid(row=1, column=0, padx=10, pady=5)
check_button2_3 = tk.Checkbutton(group_box2, variable=var8,onvalue=1,offvalue=0,text="Escalope")
check_button2_3.grid(row=2, column=0, padx=10, pady=5)
check_button2_4 = tk.Checkbutton(group_box2, variable=var9,onvalue=1,offvalue=0, text="Cordon bleu")
check_button2_4.grid(row=3, column=0, padx=10, pady=5)


# repeat for group boxes 2-5
group_box3 = tk.LabelFrame(food_frame, text="Drinks ")
group_box3.pack(side="left", fill="both", expand="yes", padx=20, pady=10)
check_button3_1 = tk.Checkbutton(group_box3, variable=var10,onvalue=1,offvalue=0,text="Eau 0,5L")
check_button3_1.grid(row=0, column=0, padx=10, pady=5)
check_button3_2 = tk.Checkbutton(group_box3, variable=var11,onvalue=1,offvalue=0,text="Soda")
check_button3_2.grid(row=1, column=0, padx=10, pady=5)
check_button3_3 = tk.Checkbutton(group_box3, variable=var12,onvalue=1,offvalue=0, text="Tea")
check_button3_3.grid(row=2, column=0, padx=10, pady=5)

# repeat for group boxes 2-5
group_box4 = tk.LabelFrame(food_frame,text="Supplement")
group_box4.pack(side="left", fill="both", expand="yes", padx=20, pady=10)
check_button4_1 = tk.Checkbutton(group_box4, variable=var13,onvalue=14,offvalue=0,text="Frite   ")
check_button4_1.grid(row=0, column=0, padx=10, pady=5)
check_button4_2 = tk.Checkbutton(group_box4, variable=var14,onvalue=1,offvalue=0,text="Fourmage ")
check_button4_2.grid(row=1, column=0, padx=10, pady=5)
check_button4_3 = tk.Checkbutton(group_box4, variable=var15,onvalue=1,offvalue=0,text="Mozzarela")
check_button4_3.grid(row=1, column=0, padx=10, pady=5)


inf_frame = tkinter.LabelFrame(frame)
inf_frame.grid(row=3, column=0, sticky="news", padx=20, pady=10)


name_label = tk.Label(inf_frame, text="Name")
name_label.grid(row=0, column=0,padx=40, pady=5)
number_label = tkinter.Label(inf_frame, text="TEL")
number_label.grid(row=0, column=1,padx=40, pady=5)

name_entry = tkinter.Entry(inf_frame)
number_entry = tkinter.Entry(inf_frame)
name_entry.grid(row=1, column=0,padx=40, pady=5)
number_entry.grid(row=1, column=1,padx=40, pady=5)

Prix_label = Label(inf_frame, text="TolatPrix :***",font=("Calibri", 18, "bold"))
Prix_label.config(highlightthickness=2, highlightbackground="navy blue")
Prix_label.grid(row=0, column=12, rowspan=6, padx=(200, 0), pady=5)

submit_button = tk.Button(inf_frame, text="Submit", command=display_order, bg='BLUE',height = 2, width = 10)
submit_button.grid(row=0, column=13, rowspan=6, padx=(100, 0), pady=5)



# Create a Treeview widget
table = ttk.Treeview(frame)
table.grid(row=4, column=0, sticky="news", padx=20, pady=10)
# Define columns
table['columns'] = ("Order","Client", "Tel", "Date/Time","SANDWECH", "viandes", "Drinks","Supplement", "Prix")

# Column headings
table.heading("#0", text="Order N")
table.heading("Order", text="Order_N")
table.heading("Client", text="Client")
table.heading("Tel", text="Tel")
table.heading("Date/Time", text="Date/Time")
table.heading("viandes", text="viandes")
table.heading("Drinks", text="Drinks")
table.heading("SANDWECH", text="SANDWECH")
table.heading("Supplement", text="Supplement")
table.heading("Prix", text="Prix")


# Set column sizes
column_width = 733 // len(table['columns'])
for col in table['columns']:
    table.column(col, minwidth=0, width=column_width, stretch=True)



time()
date = dt.datetime.now()


#============================ Order butten  ==============================#


root.mainloop()
