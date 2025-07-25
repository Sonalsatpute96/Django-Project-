from django.shortcuts import render,redirect,get_object_or_404
from .models import Todo

# Create your views here.

def todo_list(request):
    todos=Todo.objects.all()
    return render(request,'todo/index.html', {'todos':todos})

def create_todo(request):
    if request.method == "POST":
        title = request.POST.get('title')  # Get 'title' from POST data
        description = request.POST.get('description')  # Get 'description' from POST data
        Todo.objects.create(title=title, description=description)  # Use 'objects.create'
        
    return redirect('todo_list')  # Redirect to the homepage or desired URL

def complete_todo(request, todo_id):
    todo = get_object_or_404(Todo, id=todo_id)
    todo.completed = True
    todo.save()
    return redirect('todo_list')

def delete_todo(request, todo_id):
    todo = get_object_or_404(Todo, id=todo_id)
    todo.delete()
    return redirect('todo_list')

