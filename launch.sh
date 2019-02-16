#! /bin/bash
destination="/opt/lampp/htdocs"
target="mTut"

if [ -d "$destination/$target" ]; then
    sudo rm -r $destination/$target
    sudo cp -R $target $destination
    echo "placed replacement folder!"
else
    sudo cp -R $target $destination
    echo "placed fresh folder!"
fi