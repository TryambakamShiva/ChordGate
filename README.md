
###ChordGate

###(chordgate.com , https://chordgate.com/)


Without music, life would be a mistake. -- Friedrich Nietzsche


Abstract: 

The current repository is about a Python-Flask based Web Application where users can upload MP3, WAV, AIFF and FLAC Audio (Music) Files and the chords will be generated (extracted) from the music files (songs) and consequently generate images of the guitar chords (chord-diagram) in HTML. The extracted chords and chord-diagram can then be saved as .pdf file by users. For best results, upload MP3 files. File Mime-Types are checked inside server for security protocols and so if one type of file is rejected based on MIME–type, please upload another file (suitably MP3).

Credits and Attribution: 

The current repository primarily utilizes combination of some work from the following GitHub repositories:
1.	chord-extractor or https://github.com/ohollo/chord-extractor by ohollo ( https://github.com/ohollo ) and the web application uses the  Python library namely “chord-extractor” from the repository concerned to extract chord sequences from sound files of multiple formats. The extraction process wraps around Chordino ( https://code.soundsoftware.ac.uk/projects/nnls-chroma/ ).

2.	ChordJS or https://github.com/acspike/ChordJS by acspike ( https://github.com/acspike ) and the web application uses the small javascript library Chords.js from the repository concerned to generate images of guitar chords in HTML.


3.	html2canvas or https://github.com/niklasvh/html2canvas by niklasvh ( https://github.com/niklasvh ) and the web application uses library from the repository concerned to take a screenshot of a specified HTML element and convert it into a canvas element.

4.	jsPDF or https://github.com/parallax/jsPDF by parallax ( https://github.com/parallax ) and the web application uses library from the repository concerned to generate PDFs in JavaScript.


Introduction: 

Dear Friends, before I start, I would like to mention that I am a self-taught developer and software programmer (whatever you would like to call me) and I am not very proficient in any coding language. I try to relate codes without actually caring much about syntaxes, scavenging through internet forums for information and hacks, and try to create the required modules to serve my purposes. Also this is my first GitHub repository with actual codes and I don’t have much operational idea about GitHub itself. So please try to bear with me and forgive my ignorance. In all honesty, I am still a novice. The web-application is based on Python (3.8.2) using Flask framework. The web application also uses AJAX-jQuery, PHP and MySQL for its different functionalities. Thanks and Regards.  
After much trial and error (around March, 2025), the following codes were used inside terminal to successfully set-up the “chord-extractor” package (https://github.com/ohollo/chord-extractor ) for ubuntu 18.04.2 operating system in localhost and use it to extract chord sequences from sound files at least inside the terminal. I have used Python 3.8 as my interpreter. For a hypothetical case, I have considered that I do not have root-access to an actual Linux operating-system based server. 
This is to be mentioned here, that the same installation set-up is quite different for Windows operating system in localhost and in case you are going to set up the installation later in an actual server with Linux operating system (say CloudLinux) and that too without any root-access as-mentioned above (say a VPS Managed server), then the following steps could be a guide-line for the same. I have installed the packages in Windows 10, as well as in an actual server (Linux) without root-access and the following steps should then help. If possible, I will also try to provide detailed steps to install it in Windows 10 and also that in an actual Linux server (without root-access) if possible.


Installation for ubuntu 18.04.2 (localhost):


1.	sugata@sugata-p6720in:~/project$ virtualenv -p python3.8 project5
(Creates Virtual Environment)
2.	sugata@sugata-p6720in:~/project$ source project5/bin/activate
(Activates Virtual Environment)
3.	(project5) sugata@sugata-p6720in:~/project$ pip install librosa==0.7.2
(Installs librosa. I may be wrong, but I think this could be probably be the last librosa version which could probably still read MP3 audio files (if libsndfile is not installed) i.e. considering we are unable to use the command “sudo apt-get install libsndfile1” and considering we do not have root access in an actual Linux server. 
Related Information-Sources: 
https://github.com/librosa/librosa/issues/845
https://github.com/librosa/librosa/pull/847
 https://github.com/librosa/librosa/issues/970 )
4.	(project5) sugata@sugata-p6720in:~/project$ pip install vamphost
(Successfully installs vamphost-1.2.0 (the then latest version). 
The “chord-extractor” Source Distribution file hosted on PyPI ( https://pypi.org/project/chord-extractor/ https://pypi.org/project/chord-extractor/#files ) has “librosa” and “vamp” mentioned in the “requires.txt” inside the “chord_extractor.egg-info” folder. For Windows operating system the Vamp plugin pack installer ( https://code.soundsoftware.ac.uk/projects/vamp-plugin-pack ) should be taken into consideration. Also, there is a vamp python wrapper (https://pypi.org/project/vamp/ ) for pip installation, which I believe ideally, should also automatically be installed when using the “chord-extractor” Source Distribution file or using “pip install chord-extractor” i.e. using the built distribution of it, probably depending on the type of operating system and its architecture. However, “pip install vamp” did not work directly for my ubuntu operating system then as there seemed to be no Built Distributions (.whl file) for Linux operating system in it. One may try installing directly via “chord-extractor” Source or Built Distribution or from the “vamp” Source Distribution itself. So instead I chose “pip install vamphost” separately, which installed the then latest vamphost-1.2.0 version. 
5.	An intermediary crucial step (hack) is to comment the line "from numba.decorators import jit as optional_jit" in the installed file "librosa/util/decorators.py". Otherwise “import librosa” breaks due to probable mismatch between librosa and numba versions [ModuleNotFoundError: No module named 'numba.decorators']. Information-Source-Link: https://github.com/librosa/librosa/issues/1160 . 
6.	Download the “chord-extractor” Source-Distribution file ( https://pypi.org/project/chord-extractor/#files ) and extract its contents in suitable directory. Change the directory from your terminal while keeping the virtualenv active. Then install the package locally using the “setup.py” file.
(project5) sugata@sugata-p6720in:~$ python3.8 setup.py install
.       (Finishes processing dependencies for chord-extractor==0.1.2. 
The command “pip install chord-extractor” works smoothly in Windows operating system. But in my Linux system, it could not install the package probably because of lack of suitable built-distribution (.whl file) for the architecture ( https://pypi.org/project/chord-extractor/#files ). So, Source-Distribution had to be used to locally install the package via the “.setup.py” file. 
7.	Lastly flask installed in your system using “pip install flask”. Flask is used to transfer data from a Python script executed in the terminal to a Flask application and typically uses HTTP requests. The Flask framework in our case helps to transfer the generated chord-data, which is extracted by execution of the uploaded audio-files by user.  

Setting-Up the Web-Application (localhost Windows):

For initial set-up steps for Windows OS, follow the installation guideline of "chord-extractor or https://github.com/ohollo/chord-extractor by ohollo". In particular, 
"Vamp plugin pack installer ( https://code.soundsoftware.ac.uk/projects/vamp-plugin-pack )" needs to be downloaded and executed first. If possible, I will later give a detailed step by step description of it. 
The web-application, as mentioned before, is based on Python (3.8.2) using Flask framework and also uses AJAX-jQuery, PHP and MySQL for its operation. For actual implementation of the codes to be provided later in localhost (in Windows particularly), it’s required to install XAMPP first and then copy the files and folders concerned in mother folder (say ‘flask7’) in “htdocs” section. 
Also Microsoft Visual Code Editor should be useful. So if you download the repository and extract the folder, just rename it to "flask7". This was the name of the folder in my localhost in XAMPP "htdocs", and all file-path codes inside are set accordingly.
There are four subfolders inside the main folder, namely "static", "templates", "Docs" and "songs (for storing the audio files)". In a Flask application, the "static" and "templates" folders serve distinct purposes.

1.	Open XAMPP Control Panel
2.	Start Apache and MYSQL app
3.	Open Microsoft VS Code Editor and set Python 3.8 as your interpreter if not automatically detected.
4.	Open the folder “flask7” and open app.py in the folder in Integrated Terminal of VS Code Editor
5.	Write the following commands in the terminal:
set FLASK_APP=app.py
set FLASK_ENV=development
flask run
6.	Open your browser and enter “localhost:5000” or “http://127.0.0.1:5000” and you will find your application running.
7.	In localhost/phpmyadmin you also need to set up a database namely “dbnew” and 2 tables inside it (say “songs” and “gchords”), to store the audio-file paths and file-names and the extracted chords. A third table namely “tbuser” (not required now) may be created when we are using login and registration system as well. You can import the "dbnew.sql" file provided inside this repository.
8.	You can now use the flask-web-application to upload audio (song/music) files and extract chords and generate their chord-diagram (based on available chord-diagram codes set up inside the files) and download and save the same in .pdf files. All the requisite codes are provided in the files uploaded in this repository. 
9.      Press CTRL+C in terminal to quit or stop the application.

License:

1.	chord-extractor or https://github.com/ohollo/chord-extractor by ohollo ( https://github.com/ohollo ) is Licensed under the GNU General Public License v2.0.
2.	ChordJS or https://github.com/acspike/ChordJS by acspike ( https://github.com/acspike ) is Licensed under the MIT License.
3.	html2canvas or https://github.com/niklasvh/html2canvas by niklasvh ( https://github.com/niklasvh ) is Licensed under the MIT License.
4.	jsPDF or https://github.com/parallax/jsPDF by parallax ( https://github.com/parallax ) is Licensed under the MIT License.

The codes used from the repositories which are under MIT License are in the new repository in files which are inside subfolders namely “templates” and “static”. Individual license files (combined or not) for those codes are provided separately in those subfolders. The codes used from the repository which are under the GNU General Public License v2.0 are in file which is inside the main folder. Considering, this current application being primarily based on the codes which come under GNU General Public License v2.0 and the GNU General Public License v2.0 being the more restrictive of the two licenses, the repository as a whole should come under GNU General Public License v2.0, with other sectional codes in subfolders also coming under MIT License. The developer of this web-application is no legal expert and any suggestion in this regard is appreciated. For all communications in this regard or any other issues please write an email to contact@chordgate.com. 

The above information is provided here to the best of my memory and knowledge.

Yours Faithfully
Sugata Bhattacharyya
(TryambakamShiva)

