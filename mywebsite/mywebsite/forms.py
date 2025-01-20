from django import forms

class userForms(forms.Form):
    nam1 = forms.CharField(label="Value1", max_length=100,required=False,widget=forms.TextInput(attrs={'class': 'form-control'}))
    num2 = forms.CharField(label="Value2",widget=forms.TextInput(attrs={'class': 'form-control'}))