import imutils
import cv2


imagen = cv2.imread("images/agenda_2.jpg")
imagen = imutils.resize(imagen, height=500)
h, w = imagen.shape[:2]
yp = (h * 9.68) / 100
yn = (h * 84.78) / 100
xp = (w * 4.30) / 100
xn = (w * 99.05) / 100

cropped = imagen[yp:yn, xp:xn]
cv2.imshow("imagen", cropped)
cv2.waitKey(0)
