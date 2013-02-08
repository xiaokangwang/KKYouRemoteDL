#!/usr/bin/env python
# -*- coding: utf-8 -*-

from __future__ import print_function
import pkg_resources
import sys

try:
    from setuptools import setup
except ImportError:
    from distutils.core import setup

try:
    import py2exe
    """This will create an exe that needs Microsoft Visual C++ 2008 Redistributable Package"""
except ImportError:
    if len(sys.argv) >= 2 and sys.argv[1] == 'py2exe':
        print("Cannot import py2exe", file=sys.stderr)
        exit(1)

py2exe_options = {
    "bundle_files": 1,
    "compressed": 1,
    "optimize": 2,
    "dist_dir": '.',
    "dll_excludes": ['w9xpopen.exe']
}
py2exe_console = [{
    "script": "./youtube_dl/__main__.py",
    "dest_base": "youtube-dl",
}]
py2exe_params = {
    'console': py2exe_console,
    'options': { "py2exe": py2exe_options },
    'zipfile': None
}

if len(sys.argv) >= 2 and sys.argv[1] == 'py2exe':
    params = py2exe_params
else:
    params = {
        'scripts': ['bin/youtube-dl'],
        'data_files': [('etc/bash_completion.d', ['youtube-dl.bash-completion']), # Installing system-wide would require sudo...
                       ('share/doc/youtube_dl', ['README.txt']),
                       ('share/man/man1/', ['youtube-dl.1'])]
    }

# Get the version from youtube_dl/version.py without importing the package
exec(compile(open('youtube_dl/version.py').read(), 'youtube_dl/version.py', 'exec'))

setup(
    name = 'youtube_dl',
    version = __version__,
    description = 'YouTube video downloader',
    long_description = 'Small command-line program to download videos from YouTube.com and other video sites.',
    url = 'https://github.com/rg3/youtube-dl',
    author = 'Ricardo Garcia',
    maintainer = 'Philipp Hagemeister',
    maintainer_email = 'phihag@phihag.de',
    packages = ['youtube_dl'],

    # Provokes warning on most systems (why?!)
    #test_suite = 'nose.collector',
    #test_requires = ['nosetest'],

    classifiers = [
        "Topic :: Multimedia :: Video",
        "Development Status :: 5 - Production/Stable",
        "Environment :: Console",
        "License :: Public Domain",
        "Programming Language :: Python :: 2.6",
        "Programming Language :: Python :: 2.7",
        "Programming Language :: Python :: 3",
        "Programming Language :: Python :: 3.3"
    ],

    **params
)
