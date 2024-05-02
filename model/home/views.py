from django.shortcuts import render, HttpResponse
from django.core.files.storage import FileSystemStorage
import pickle
import pandas as pd
import re
from django.views.decorators.csrf import csrf_exempt


img_height, img_width=300,300

pickled_model=pickle.load(open('./models/Departements.pkl','rb'))
data = pd.read_excel("./models/Specialist.xlsx")
x = data.drop(['Maladies', 'Unnamed: 0'], axis = 1)

# Create your views here.
def home(request):
    # return HttpResponse("This is our home page")
    return render(request, 'index.html')

@csrf_exempt
def predictImage(request):
    texte = request.POST.get('imgPredict')
    mots = re.split(r'\W+', texte)
    mots_dans_liste = [1 if mot in mots else 0 for mot in x.columns]
    predict = pickled_model.predict([mots_dans_liste])
    prediction = predict[0]

    context={'prediction': prediction}
    return render(request, 'index.html', context)