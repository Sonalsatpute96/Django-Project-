from django.http import HttpResponse,HttpResponseRedirect
from django.shortcuts import render
from .forms import userForms
from service.models import Service
from news.models import News
from django.core.paginator import Paginator
from contactForm.models import contactForm



def homePage(request):
    data={
        'title':'Tables',
        'info':'Student Info',
        'clist':['python','java','php'],
        'numbers':[10,20,30,40,50],
        'student_Details':[
            {'name':'Sonal','phone':7385524600},
            {'name':'Swapnil','phone':9766644550}
        ]
    }
    # return render(request,"index.html",data)
    return render(request,"LandingPage.php")

def aboutUs(request):
    return HttpResponse("Welcome to my website")
def Course(request):
    return HttpResponse("<h1>Python Course</h1>")

def courseDetails(request,courseid):
    return HttpResponse(courseid)

def thankYou(request):
    return render(request,"thankYou.html")

def icon(request):
    NewsData=News.objects.all()
    ServiceData=Service.objects.all()
    paginator=Paginator(ServiceData,1)
    page_number=request.GET.get('page')
    ServiceDataFinal=paginator.get_page(page_number)
      # Check if the 'ServiceName' GET parameter is present
    # st = request.GET.get('ServiceName')
    # if st:
    #     ServiceData = Service.objects.filter(service_title__icontains=st)
    # else:
    #     ServiceData = Service.objects.all().order_by('id')[0:3]

    data = {
        'ServiceData': ServiceDataFinal,
        'NewsData': NewsData
    }
    return render(request, "icon.html", data)

def contact_form_view(request):
    message = ''  # Initialize message to avoid UnboundLocalError

    if request.method == 'POST':
        name = request.POST.get('name')
        email = request.POST.get('email')
        phone = request.POST.get('phone')
        website = request.POST.get('website')
        user_message = request.POST.get('message')  # Avoid overwriting 'message'
        
        data = contactForm(
            contactName=name,
            contactEmail=email,
            contactPhone=phone,
            contactWebName=website,
            contactMessage=user_message
        )
        data.save()
        message = 'Data inserted'

    return render(request, "contactForm.html", {'message': message})

def newsDetail(request,slug):
    newsDetail=News.objects.get(news_slug=slug)
    data={
        'newsDetail':newsDetail
    }
    return render(request,"newsDetail.html",data)

def calculator(request):
    result=''
    try:
        if request.method=='POST':
            n1=float(request.POST.get('num1'))
            n2=float(request.POST.get('num2'))
            opr=request.POST.get('opr')
            if opr == '+' :
                result=n1+n2
            elif opr == '-' :
                result=n1-n2 
            elif opr == '*' : 
                result=n1*n2 
            elif opr == '/' :
                result=n1/n2 

    except Exception as e:  # Print the exception details
        result = "Invalid Operation"
        print(f"Error: {e}")  # For debugging
    return render(request,"calculator.html",{"result": result})

def evenOdd(request):
    if request.POST.get('num1')=="":
        return render(request,"evenOdd.html",{'error':True})
    
    result=''
    if request.method =='POST':
        n1=int(request.POST.get('num1'))
        if n1%2==0:
            result='Even No'
        else:
            result='Odd No'
    return render(request,"evenOdd.html",{'result':result})

def marksheet(request):
    data={}
    if request.method=='POST':
        s1=int(request.POST.get('sub1'))
        s2=int(request.POST.get('sub2'))
        s3=int(request.POST.get('sub3'))
        s4=int(request.POST.get('sub4'))
        s5=int(request.POST.get('sub5'))

        total=s1+s2+s3+s4+s5
        per=total/5
        if per>=80:
            div="A Division"
        elif per>=60:
            div="B Division"
        elif per>=35:
            div="C Division"
        else:
            div="Fail"
        data={'total': total,'per':per,'div':div}
    return render(request,"marksheet.html",data)


def userForm(request):
    finalans=0
    try:
        # n1=int(request.GET['num1'])
        # n2=int(request.GET('num2'))
        n1=int(request.GET.get('num1'))
        n2=int(request.GET.get('num2'))
        finalans=n1+n2
        return HttpResponseRedirect('/thankYou/')       #to redirect the the page to thank you page
    except:
        pass
    return render(request,"form.html",{'output':finalans})

#For Post method
# def formpost(request):
#     finalans=0
#     data={}
#     try:
#         if request.method=="POST":
#             n1=int(request.POST.post('num1'))
#             n2=int(request.POST.post('num2'))
#             finalans=n1+n2
#             data={
#                 'n1':n1,
#                 'n2':n2,
#                 'output1':finalans
#             }
#         return HttpResponseRedirect('/course/')
#     except:
#         pass
#     return render(request,"formpost.html",data)

# the changes made at the time of learnung Django forms 
def formpost(request):
    fn=userForms()
    finalans=0
    data={'form':fn}
    try:
        if request.method=="POST":
            n1=int(request.POST.post('num1'))
            n2=int(request.POST.post('num2'))
            finalans=n1+n2
            data={
                'form':fn,
                'output1':finalans
            }
        return HttpResponseRedirect('/course/')
    except:
        pass
    return render(request,"formpost.html",data)

