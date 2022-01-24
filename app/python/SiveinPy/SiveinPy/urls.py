from django.conf.urls import patterns, include, url
from django.contrib import admin
from django.conf import settings

admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'SiveinPy.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),

	url(r'^media/(?P<path>.*)$','django.views.static.serve',{'document_root':settings.MEDIA_ROOT,}), 	
	url(r'^static/(.*)$', 'django.views.static.serve', {'document_root' : settings.STATIC_ROOT}),
					   
    # inicio
    url(r'^',include('apps.inicio.urls')),

    # autores
    url(r'^autores/',include('apps.autores.urls')),
                       
    # libros
    url(r'^libros/',include('apps.libros.urls')),
)
