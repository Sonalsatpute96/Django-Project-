from django.db import models

class contactForm(models.Model):
    contactName=models.CharField(max_length=50)
    contactEmail=models.CharField(max_length=50)
    contactPhone=models.CharField(max_length=50)
    contactWebName=models.CharField(max_length=50)
    contactMessage=models.TextField()

    

# Create your models here.
