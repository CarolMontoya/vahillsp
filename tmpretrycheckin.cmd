:retry
sleep 60
bzr ci -m %1
if errorlevel==1 goto retry
