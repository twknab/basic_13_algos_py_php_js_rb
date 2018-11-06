# 1 
def print_1_to_255():
  for i in range(1,256):
    print(i)
print_1_to_255()

# 2
def print_ints_and_sum():
  sum = 0
  for i in range(0, 256):
    sum += i
    print(i)
    print(sum)
print_ints_and_sum()

# 3
def find_and_print_max(arr):
  max = arr[0]
  for i in arr:
    if i > max:
      max = i
  print(max)
find_and_print_max([1,2,3,4,5])

# 4
def array_with_odds():
  odds = []
  for i in range(1,256):
    if i % 2 == 1:
      odds.append(i)
  print(odds)
array_with_odds()

# 5
def greater_than_y(arr, y):
  count = 0
  for i in arr:
    if i > y:
      count += 1
  print(count)
greater_than_y([1,2,3,4,5], 3)

# 6
def min_max_avg(arr):
  min = arr[0]
  max = arr[0]
  sum = 0
  for i in arr:
    if i > max:
      max = i
    if i < min:
      min = i
    sum += i
  avg = sum / len(arr)
  print(min, max, avg)
min_max_avg([1,2,3,4,5])

# 7
def swap_string_for_array_negative_values(arr):
  for i, val in enumerate(arr):
    if val < 0:
      arr[i] = "Dojo"
  print(arr)
swap_string_for_array_negative_values([-1,2,3,4,5])

# 8
def print_odds_1_to_255():
  for i in range(256):
    if i % 2 == 1: print(i)
print_odds_1_to_255()

# 9
def iterate_and_print_array(arr):
  for val in arr:
    print(val)
iterate_and_print_array([1,2,3,4,5])

# 10
def get_and_print_average(arr):
  sum = 0
  for val in arr:
    sum += val
  print(sum/len(arr))
get_and_print_average([1,2,3,4,5])

# 11
def square_the_values(arr):
  for i, val in enumerate(arr):
    arr[i] = val * val
  print(arr)
  return arr
square_the_values([1,2,3,4,5])

# 12
def zero_out_negative_numbers(arr):
  for i, val in enumerate(arr):
    if val < 0 : arr[i] = 0
  print(arr)
  return arr
zero_out_negative_numbers([1,2,3,4,-1])

# 13
def shift_array_values(arr):
  for i, val in enumerate(arr):
    try:
      arr[i] = arr[i + 1]
    except IndexError:
      arr[i] = 0
  print(arr)
shift_array_values([1,2,3,4,5])