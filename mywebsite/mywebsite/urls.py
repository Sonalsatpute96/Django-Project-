"""
URL configuration for mywebsite project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/5.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from mywebsite import views
from .views import contact_form_view 
from django.conf import settings
from django.conf.urls.static import static





urlpatterns = [
    path('admin/', admin.site.urls),
    path('about-us/', views.aboutUs),
    path('', views.homePage),
    path('thankYou/',views.thankYou,name='thankYou'),
    path('course/', views.Course),
    path('userForm/',views.userForm),
    path('formpost/',views.formpost),
    path('calculator/',views.calculator,name="calculator"),
    path('evenOdd/', views.evenOdd),
    path('marksheet/',views.marksheet),
    path('icon/',views.icon),
    path('search', views.icon, name='search'),
    path('contact/',views.contact_form_view,name='contactForm'),
    path('newsDetail/<str:slug>',views.newsDetail),
    path('course/<str:courseid>',views.courseDetails)
   
    # instead of str we can use int and slug (eng of slug =>python-django-angular) 
    # if we are unaware of what should be there in the dynamic url then syntax=>path('course/<courseid>',views.courseDetails)
]

if settings.DEBUG:
    urlpatterns+=static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)