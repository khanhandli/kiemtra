# -*- coding: utf-8 -*-
import xml.etree.ElementTree as read
tree = read.ElementTree(file = 'sinhvien.xml')
root = tree.getroot()

# all items data
print('Danh sách sinh viên:')
for elem in root:
    i = 0
    
    print('********************Sinh vien ' + str(elem.get('id')) +'********************** \n')
    print("")

    for subelem in elem:

        print(subelem.text)
    # if(elem.tag == 'sinhvien'):
    #     print('ID: ' + elem.get('id'))
    #     for i in elem:
    #         print(i.text)
    #         print('*****************')

        