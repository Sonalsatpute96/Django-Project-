from django.contrib import admin
from news.models import News

class NewsAdmin(admin.ModelAdmin):
    list_display=('News_title','News_desc','news_images')

# Register your models here.
admin.site.register(News,NewsAdmin)