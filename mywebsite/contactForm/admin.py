from django.contrib import admin
from .models import contactForm

class ContactAdmin(admin.ModelAdmin):
    list_display=('contactName','contactEmail','contactPhone','contactWebName','contactMessage')

# Register your models here.
admin.site.register(contactForm,ContactAdmin)