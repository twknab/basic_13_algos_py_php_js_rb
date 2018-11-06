# 1
def print_1_to_255
  for i in 1..255
    puts i
  end
end
print_1_to_255

# 2 
def print_ints_and_sum
  sum = 0
  for i in 0..255
    sum += i
    puts i
    puts sum
  end
end
print_ints_and_sum

# 3
def find_and_print_max(arr)
  max = arr[0]
  arr.each do |num|
    if num > max
      max = num
    end
  end
  puts max
end
find_and_print_max([1,2,3,4,5])

# 4
def array_with_odds
  odds = []
  for i in 1..255
    if i % 2 == 1
      odds.push(i)
    end
  end
  puts odds
end
array_with_odds

# 5
def greater_than_y(arr, y) 
  count = 0
  for i in arr
    if i > y
      count += 1
    end
  end
  puts count
end
greater_than_y([1,2,3,4,5], 3)

# 6
def min_max_avg(arr)
  min = arr.first
  max = arr.first
  sum = 0
  for i in arr
    if i > max
      max = i
    end
    if i < min
      min = i
    end
    sum += i
  end
  avg = sum / arr.count
  puts min, max, avg
end
min_max_avg([1,2,3,4,5])

def swap_string_for_array_negative_values(arr)
  # Way of writing it similar to other languages:
  # arr.each_with_index do |val, i|
  #   if (val < 0)
  #     arr[i] = "Dojo"
  #   end
  # end

  # This is more of a Ruby way of doing things:
  arr.each_with_index { |val, i| arr[i] = "Dojo" if val < 0 }
  # method then |variables| -- statement then condition
  puts arr
end
swap_string_for_array_negative_values([-1,2,3,4,5])

# 8
def print_odds_1_to_255
  for i in 1..255
    puts i if i % 2 == 1
  end
end
print_odds_1_to_255

# 9
def iterate_and_print_array(arr)
  for i in arr
    puts i
  end
end
iterate_and_print_array([1,2,3,4,5])

# 10
def get_and_print_average(arr)
  sum = 0
  for val in arr
    sum += val
  end
  puts(sum/arr.count)
end
get_and_print_average([1,2,3,4,5])

# 11
def square_the_values(arr)
  arr.each_with_index { |val, i| arr[i] = val * val }
  puts arr
  return arr
end
square_the_values([1,2,3,4,5])

# 12
def zero_out_negative_numbers(arr)
  arr.each_with_index { |val, i| arr[i] = 0 if val < 0 }
  puts arr
  return arr
end
zero_out_negative_numbers([1,2,3,4,-1])

# 13
def shift_array_values(arr)
  arr.each_with_index { |val, i| arr[i] = arr[i + 1] }
  arr[arr.count-1] = 0
  puts arr
  return arr
end
shift_array_values([1,2,3,4,5])